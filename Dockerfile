# Use an official Python runtime as a parent image
FROM python:3.11

ENV PYTHONUNBUFFERED 1

# Set the working directory in the container
WORKDIR /app

# Copy the requirements.txt file into the container
COPY requirements.txt /app/

# Install any needed packages specified in requirements.txt
RUN pip install -r requirements.txt

# Copy the rest of your application's code into the container
COPY . /app/

# Expose the port that the application will run on (customize if needed)
EXPOSE 8000


CMD ["python", "what.py", "runserver", "0.0.0.0:8000"]